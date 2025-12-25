<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Request;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    // protected $fillable = [
    //     'name',
    //     'username',
    //     'email',
    //     'password',
    //     'photo',
    //     'phone',
    //     'address',
    //     'role',
    //     'status',
    // ];
    protected $guarded = [];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // get record from users table => View All Users
    // static public function getRecord()

    //filter by role and status => View All Users
    static public function getRecord($request)
    {
        $return = self::select('users.*');
                        // Soft delete condition
        $return = $return->where('is_deleted', '=', 0);

        //Search start
        if (!empty($request->get('id'))) {
            $return = $return->where('id', '=', $request->get('id'));
        }
        if (!empty($request->get('name'))) {
            $return = $return->where('name', 'like', '%' . $request->get('name') . '%');
        }
        if (!empty($request->get('email'))) {
            $return = $return->where('email', 'like', '%' . $request->get('email') . '%');
        }
        if (!empty($request->get('website'))) {
            $return = $return->where('website', 'like', '%' . $request->get('website') . '%');
        }
        if (!empty($request->get('status'))) {
            $return = $return->where('status', '=', $request->get('status'));
        }
        if (!empty($request->get('role'))) {
            $return = $return->where('role', '=', $request->get('role'));
        }
        if (!empty($request->get('start_date')) && !empty($request->get('end_date'))) {
            $return = $return->where('created_at', '>=', $request->get('start_date'))
                             ->where('created_at', '<=', $request->get('end_date'));
        }

        //Search end

        $return = $return->orderBy('id', 'asc')
            ->paginate(10);

        return $return;
    }

    // get single record from users table => View User
    static public function single_record($id)
    {
        return self::find($id);
    }


}
