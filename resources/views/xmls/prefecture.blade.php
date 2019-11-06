<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>

<channels-find xmlns="http://www.aok-net.com/">
  <channel>

    <title>iタウンページ 地域の絞り込み Level1 都道府県</title>
    <linkBase>http://www.aok-net.jp/</linkBase>

    @foreach($items as $item)
    <item>
      <category>{{ $item["category"] }}</category>
      <param>{{ $item["param"] }}</param>
      <description>{{ $item["description"] }}</description>
    </item>
    @endforeach

  </channel>
  <find>
    <item>
      <xLink>itownpage/1.00/</xLink>
    </item>
  </find>
</channels-find>
