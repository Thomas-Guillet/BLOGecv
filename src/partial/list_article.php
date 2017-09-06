<div id="list" class="table-responsive">
  <table class="table">
    <tbody>
      <?php
      foreach ($list_article as $key => $article) {
      ?>
        <tr>
          <td><?= $article[0]['title'] ?></td>
          <td><?= $article[0]['name'].' - '.$article[0]['mail'] ?></td>
          <td><?= $article[0]['created_at'] ?></td>
          <td><?= $article[0]['state'] ?></td>
          <td><a href='?edit&id=<?= $key ?>' id="edit_article" style="padding: 5px;">Edit</a></td>
        </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</div>