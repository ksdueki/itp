<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>

<channels-find>
  <channel>
    <channelId>tpage</channelId>

    <title>{{ $title }}</title>
    <link>{{ $link }}</link>
    <linkBase>{{ $linkBase }}</linkBase>

    <item id="Keyword">
      <category>キーワード検索</category>
      <param>
      </param>
    </item>

    @foreach($items as $item)
    <item>
      <title>{{ $item["title"] }}</title>
      <category>{{ $item["category"] }}</category>
      <param>{{ $item["param"] }}</param>
    </item>
    @endforeach

  </channel>

  <find>
    <item id="Keyword">
      <xLink>http://itprss/?</xLink>
      <link>https://itp.ne.jp/</link>
    </item>
    <item>
      <xLink>http://itprss/</xLink>
      <link>https://itp.ne.jp/</link>
    </item>
  </find>
  <keyword>
    <item id="Keyword">
      <input name="キーワード"></input>
    </item>
  </keyword>
</channels-find>
