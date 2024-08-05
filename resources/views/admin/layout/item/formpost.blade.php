<div class="row">
    <div class="col-12">
        <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">Post table</h6>
                </div>
            </div>
            <div class="card-body px-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Title</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Content</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Image
                                </th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Description</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    View</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Category</th>
                                <th class="text-secondary opacity-7"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $posts)
                                <tr>
                                    <td class="align-middle text-center text-sm">
                                        <span class="badge badge-sm bg-gradient-success">{{ $posts->id }}</span>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">{{ $posts->title }}</p>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0" style="word-wrap: break-word; word-break: break-all;">{{ $posts->content }}</p>
                                    </td>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div>
                                                <img src="{{ \Storage::url($posts->image) }}"
                                                    class="avatar avatar-sm me-3 border-radius-lg" alt="user1" >
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">{{ $posts->author }}</h6>
                                                {{-- <p class="text-xs text-secondary mb-0">john@creative-tim.com</p> --}}
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">{{ $posts->description }}</p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class="badge badge-sm bg-gradient-success">{{ $posts->view }}</span>
                                    </td>
                                    <td class="align-middle text-center"
                                        @foreach ($category as $item)
                                            @if ($posts->idCategory == $item->id)
                                                <span class="text-secondary text-xs font-weight-bold">{{$item->name}}</span>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td class="align-middle">
                                        <a href="{{route('editPost',$posts->id)}}"><button type="button" class="btn btn-success">Edit</button></a>
                                        <form action="{{ route('destroyPost', $posts->id) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" onclick="return confirm('Bạn có thật sự muốn xóa !')"
                                                class="btn btn-danger mt-3">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <a href="{{route('createPost')}}"><button type="button" class="btn btn-warning">Create</button></a>
    </div>
</div>
