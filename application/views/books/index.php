<?php echo validation_errors(); ?>

<form action="" method="post">

<select name="books">
<option value="-1">--select--</option>
<?php foreach($books as $b): ?>

<option value="<?php echo $b->book_id ?>"><?php echo $b->book_title ?></option>

<?php endforeach; ?>
</select>


<input type="submit" />
</form>
