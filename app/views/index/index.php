<?php var_dump($skuters) ?>
<form action="" method="POST">
  <div class="form-group">
    <label for="exampleFormControlSelect1">Example select</label>
    <select class="form-control" id="exampleFormControlSelect1">
        <?php foreach($skuters as $skuter): ?>
            <option value="<?= $skuter['nomor_skuter'] ?>"><?= $skuter['nomor_skuter'] ?></option>
        <?php endforeach ?>
    </select>
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>