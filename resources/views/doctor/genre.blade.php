<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>

<channels-find>
  <channel>
    <channelId>gtpage-si</channelId>

    <title>病院施設を探す</title>
    <link>{{ $link }}</link>
    <linkBase>{{ $linkBase }}</linkBase>


    <item id="gtpage-key">
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
    <item id="gtpage-key">
      <xLink>http://itprss/?</xLink>
      <link>https://itp.ne.jp/</link>
    </item>
    <item>
      <xLink>http://itprss/</xLink>
      <link>https://itp.ne.jp/</link>
    </item>
  </find>

  <keyword>
    <item id="gtpage-key">
      <input name="itps-keyword"></input>
      <input name="itps-category"></input>
    </item>
  </keyword>
</channels-find>
