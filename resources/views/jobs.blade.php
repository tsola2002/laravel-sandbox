<ul>
    @foreach ($jobs as $job)
        <li>
            <strong>Title:</strong> {{ $job['title'] }} <br>
            <strong>Salary:</strong> {{ $job['salary'] }}
        </li>
        <br>
    @endforeach
</ul>
