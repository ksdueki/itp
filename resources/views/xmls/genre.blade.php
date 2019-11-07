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
  <layout>
    <item>
      <RegText>
        <scope>https://aok-net.jp/itownpage/itp/public/</scope>
      </RegText>
    </item>
  </layout>
  <find>
    <item>
      <xLink>http://itprss/</xLink>
      <link>https://aok-net.jp/itownpage/itp/public/genres/</link>
    </item>
  </find>
  <keyword>
    <item>
      <input>kw=</input>
    </item>
  </keyword>
</channels-find>
