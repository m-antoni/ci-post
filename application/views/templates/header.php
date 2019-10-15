<!DOCTYPE html>
<html>
<head>
	<title>CI Blog</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
</head>
<body>

	<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-3">
		<div class="container">
			<a class="navbar-brand" href="<?php echo base_url(); ?>">Blog</a>
		      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
		        <span class="navbar-toggler-icon"></span>
		      </button>

		      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
		        <ul class="navbar-nav mr-auto">
		          <li class="nav-item active">
		            <a class="nav-link" href="<?php echo base_url(); ?>home">Home</a>
		          </li>
		          <li class="nav-item">
		            <a class="nav-link" href="<?php echo base_url(); ?>about">About</a>
		          </li>
		          <li class="nav-item active">
		            <a class="nav-link" href="<?php echo base_url();?>posts">Blog</a>
		          </li>
		        </ul>
		       <ul class="navbar-nav my-auto">
		          <li class="nav-item active">
		            <a class="nav-link" href="<?php echo base_url()?>posts/create">Create</a>
		          </li>
		        </ul>
		      </div>	
		</div>
    </nav>

    <div class="container">

