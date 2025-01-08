<h1>{{ $unipage->name }}</h1>

    <h2>Tabs:</h2>
    @if($unipage->tabs->isEmpty())
        <p>No tabs available for this page.</p>
    @else
        <ul>
            @foreach ($unipage->tabs as $tab)
                <li>
                    <h3>{{ $tab->name }}</h3>
                    <p>{{ $tab->content }}</p>

                    <a href="{{ route('unipage.editTab', ['unipageId' => $unipage->id, 'tabId' => $tab->id]) }}">Edit</a> |
                    <form action="{{ route('unipage.deleteTab', ['unipageId' => $unipage->id, 'tabId' => $tab->id]) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" style="color: red;">Delete</button>
                    </form>
                </li>
            @endforeach
        </ul>
    @endif

    <h2>Add New Tab:</h2>
    <form action="{{ route('unipage.addTab', $unipage->id) }}" method="POST">
        @csrf
        <label for="tabName">Tab Name:</label>
        <input type="text" id="tabName" name="name" required>
        <br><br>
        <label for="tabContent">Tab Content:</label>
        <textarea id="tabContent" name="content" required></textarea>
        <br><br>
        <button type="submit">Add Tab</button>
    </form>

    <h2>Images:</h2>
    @if($unipage->images->isEmpty())
        <p>No images available for this page.</p>
    @else
        <div style="display: flex; gap: 10px; flex-wrap: wrap;">
            @foreach ($unipage->images as $image)
                <img src="{{ asset('storage/' . $image->image_path) }}" alt="Image" style="max-width: 200px;">
            @endforeach
        </div>
    @endif