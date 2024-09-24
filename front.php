<?php
include "conn.php"
?>

<style>
  .form-container {
    display: flex;
    justify-content: space-between;
  }
</style>

<div class="form-container">
<form action="create.php" method="POST">
<h2>Create</h2>
<p>nome:</p>
<input type="text" name="nome">
<p>email:</p>
<input type="text" name="email">
<p>senha:</p>
<input type="text" name="senha">
<p>idade:</p>
<input type="text" name="idade">
<button>Create</button>
</form>

<form action="read.php" method="POST" >
<h2>Read</h2>
<p>id:</p>
<input type="text" name="id">
<button>Read</button>
</form>

<form action="update.php" method="POST">
<h2>Update</h2>
<p>id:</p>
<input type="text" name="id">
<p>nome:</p>
<input type="text" name="nome">
<p>email:</p>
<input type="text" name="email">
<p>senha:</p>
<input type="text" name="senha">
<p>idade:</p>
<input type="text" name="idade">
<button>Update</button>
</form>

<form action="delete.php" method="POST">
<h2>Delete</h2>
<p>id:</p>
<input type="text" name="id">

<button>Delete</button>
</form>
</div>