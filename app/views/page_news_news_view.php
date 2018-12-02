<table>
    <caption>News</caption>
    <tr>
        <th>title</th>
        <th>text</th>
        <th>author</th>
    </tr>
    <?php foreach($this->news as $key=>$news_item) :?>
    <tr>
        <td><?= $news_item['title'] ?></td>
        <td><?= $news_item['text'] ?></td>
        <td><?= $news_item['author'] ?></td>
    </tr>
    <?php endforeach;?>
</table>