<?php

// app/helpers.php
use App\Models\Fevicon;

function currentFavicon()
{
    $favicon = Fevicon::latest()->first();
    return $favicon && file_exists(public_path('storage/' . $favicon->image))
        ? asset('storage/' . $favicon->image)
        : asset('images/favicon-default.png');
}
