@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">
        @include('_message')
        <div class="card">
            <div class="card-body">
                <div class="row">
                    {{-- side bar blade include --}}
                    @include('admin.email._sidebar')
                    {{-- side bar blade include --}}
                    
                    <div class="col-lg-9">
                        <div class="p-3 border-bottom">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-end mb-2 mb-md-0">
                                        <i data-feather="inbox" class="text-muted me-2"></i>
                                        <h4 class="me-1">Inbox</h4>
                                        <span class="text-muted">(2 new messages)</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <input class="form-control" type="text" placeholder="Search mail...">
                                        <button class="btn btn-light btn-icon" type="button" id="button-search-addon"><i
                                                data-feather="search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-3 border-bottom d-flex align-items-center justify-content-between flex-wrap">
                            <div class="d-none d-md-flex align-items-center flex-wrap">
                                <div class="form-check me-3">
                                    <input type="checkbox" class="form-check-input" id="inboxCheckAll">
                                </div>
                                <div class="btn-group me-2">
                                    <button class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown"
                                        type="button"> With selected <span class="caret"></span></button>
                                    <div class="dropdown-menu" role="menu">
                                        <a class="dropdown-item" href="#">Mark as read</a>
                                        <a class="dropdown-item" href="#">Mark as unread</a><a
                                            class="dropdown-item" href="#">Spam</a>
                                        {{-- <a href="{{ url('admin/email_sent/delete_all') }}"
                                            onclick="return confirm('Are you sure you want to delete this item?')"
                                            id="getDeleteURL" class="dropdown-item">Delete</a> --}}
                                    </div>
                                </div>
                                <div class="btn-group me-2">
                                    <button class="btn btn-outline-primary" type="button">Archive</button>
                                    <button class="btn btn-outline-primary" type="button">Span</button>
                                    <a href="{{ url('admin/email_sent/delete_all') }}"
                                            onclick="return confirm('Are you sure you want to delete this item?')"
                                            id="getDeleteURL"  class="btn btn-outline-primary"  class="dropdown-item">Delete</a>
                                </div>
                                <div class="btn-group me-2 d-none d-xl-block">
                                    <button class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown"
                                        type="button">Order by <span class="caret"></span></button>
                                    <div class="dropdown-menu" role="menu">
                                        <a class="dropdown-item" href="#">Date</a>
                                        <a class="dropdown-item" href="#">From</a>
                                        <a class="dropdown-item" href="#">Subject</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Size</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="email-list">
                            @foreach ($getEmail as $item)
                                <!-- email list item -->
                                <div class="email-list-item email-list-item--unread">
                                    <div class="email-list-actions">
                                        <div class="form-check">
                                            {{-- to check box delete add value and js code of (delete-all-option) --}}
                                            <input type="checkbox" class="form-check-input delete-all-option"
                                                value="{{ $item->id }}">
                                        </div>
                                        <a class="favorite" href="javascript:;"><span><i
                                                    data-feather="star"></i></span></a>
                                    </div>
                                    {{-- to show subject and description of email --}}
                                    <a href="{{ url('admin/email_sent/read/' . $item->id) }}" class="email-list-detail">
                                        <div class="content">
                                            <span class="from">{{ $item->subject }}</span>
                                            <p class="msg">{{ $item->descriptions }}</p>
                                        </div>
                                        <span class="date">
                                            {{ $item->created_at->translatedFormat('d F Y') }}

                                        </span>
                                    </a>
                                </div>
                            @endforeach

                        </div>
                        <div class="mt-3 d-flex justify-content-end">
                            {{ $getEmail->links() }}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        $('.delete-all-option').change(function() {
            var total = '';
            $('.delete-all-option').each(function() {
                if (this.checked) {
                    var id = $(this).val();
                    total += id + ',';
                }
            });
            var url = '{{ url('admin/email_sent?id=') }}' + total;
            $('#getDeleteURL').attr('href', url);

        });
    </script>
@endsection




// {{--
// $('.delete-all-option').on('click', function () {
//     if ($(this).is(':checked')) {
//         $(this).closest('.email-list-item').addClass('selected');
//     } else {
//         $(this).closest('.email-list-item').removeClass('selected');
//     }
// }); --}}
