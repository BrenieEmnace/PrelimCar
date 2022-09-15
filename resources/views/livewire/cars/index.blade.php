<div>
    <table class="table table-striped shadow border border-light">
        <thead class="bg-info">
            <tr>
                <th>ID No</th>
                <th>Car Name</th>
                <th>Car Brand</th>
                <th>Price</th>
                <th>Color</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cars as $car)
                <tr>
                    <td>{{ $car->id }}</td>
                    <td>{{ $car->car_name }}</td>
                    <td>{{ $car->car_brand }}</td>
                    <td>{{ $car->price }}</td>
                    <td>{{ $car->color }}</td>
                    <td>
                        <a href="{{ url('edit', ['car' => $car->id]) }}" class="btn btn-primary" id="ic" title="Edit">Edit</a>
                    </td>
                    <td>
                        <a href="{{ url('delete', ['car' => $car->id]) }}" class="btn btn-danger" id="ic" title="Delete">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<style>

</style>
