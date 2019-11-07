<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>

<channels-find xmlns="http://www.aok-net.com/">
  <channel>

    <title>{{ $title }}</title>
    <linkBase>{{ $linkBase }}</linkBase>

    @foreach($items as $item)
    <item>
      <title>{{ $item["title"] }}</title>
      <category>{{ $item["category"] }}</category>
      <param>{{ $item["param"] }}</param>
    </item>
    @endforeach

  </channel>
</channels-find>
