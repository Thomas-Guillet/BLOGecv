<div id="list" class="table-responsive">
  <table class="table">
    <tbody>
      <?php
      foreach ($list_article as $article) {
      ?>
        <tr>
          <td><?= $article[0]['title'] ?></td>
          <td><?= $article[0]['name'].' - '.$article[0]['mail'] ?></td>
          <td><?= $article[0]['created_at'] ?></td>
          <td><?= $article[0]['state'] ?></td>
          <td><button id="edit_article">Edit</button><button id="delete_article">Delete</button></td>
        </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</div>