<h2>
    {{ $job->title }}
</h2>

<p>
    Hey! Congrats! Your job is now live on our website.
</p>

<p>
    <a HREF="{{ url('jobs/' . $job->id) }}">View your job listing</a>
</p>
