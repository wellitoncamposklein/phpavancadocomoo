<table>
  <tr>
    <td>ID</td>
    <td>Name</td>
    <td>Description</td>
  </tr>
  <?php foreach ($list as $product): ?>
    <tr>
      <td><?=$product['id']?></td>
      <td><?=$product['name']?></td>
      <td><?=$product['descri']?></td>
    </tr>
  <?php endforeach;?>
</table>
