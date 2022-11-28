<?php
$modal = (object)array_merge([
  'title' => false,
  'closeButton' => true,
], $modal ?? []);
?>
<div class="modal">
  <div class="modal-content">
    <div class="modal-header">
      <h4 class="fw-normal text-gray-700 m-0 text-center"><?= $modal->title ?></h4>
      <?= $modal->closeButton ? '<button type="button" class="btn-close"></button>' : '' ?>
    </div>
    <div class="modal-body">
