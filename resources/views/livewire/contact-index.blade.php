<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    @livewire('contact-create')
    <hr>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 0; ?>
            @foreach ($contacts as $contact)
                <?php $no++; ?>
                <tr>
                    <th scope="row">{{ $no }}</th>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td>
                        <button class="btn btn-sm btn-info text-white">Edit</button>
                        <button class="btn btn-sm btn-danger text-white">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
