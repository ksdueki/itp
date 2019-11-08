<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>

<channels-find>
  <channel>
    <channelId>tpage</channelId>

    <title>{{ $title }}</title>
    <link>{{ $link }}</link>
    <linkBase>{{ $linkBase }}</linkBase>

    @foreach($items as $item)
    <item>
      <title>{{ $item["title"] }}</title>
      <category>{{ $item["category"] }}</category>
      <param>{{ $item["param"] }}</param>
    </item>
    @endforeach

  </channel>
  <find>
    <item>
      <xLink>http://itprss/</xLink>
      <link>https://itp.ne.jp/dir_result/</link>
    </item>
  </find>
</channels-find>
