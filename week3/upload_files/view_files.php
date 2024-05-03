<?php

session_start();
if (!isset($_SESSION['isSortAsc']))
  $_SESSION['isSortAsc'] = true;

$dir = 'upload/';

$files = scandir($dir);

if ($files === false) {
  echo 'Error: ' . $dir . ' could not be read.';
  exit;
} else {
  $files = array_map(function ($file) use ($dir) {
    $filepath = $dir . $file;
    return [$file, mime_content_type($filepath), filectime($filepath), filesize($filepath)];
  }, array_diff($files, ['.', '..']));
}

if (isset($_GET['sort']) && isset($_GET['order'])) {
  $sort_types = ['name', 'type', 'time', 'size'];

  $sort_type_index = array_search($_GET['sort'], $sort_types);

  if ($_GET['order'] == 'asc')
    usort($files, function ($a, $b) use ($sort_type_index) {
      return $a[$sort_type_index] > $b[$sort_type_index];
    });
  else
    usort($files, function ($a, $b) use ($sort_type_index) {
      return $a[$sort_type_index] < $b[$sort_type_index];
    });

  $_SESSION['isSortAsc'] = !$_SESSION['isSortAsc'];
}

$is_sort_asc = $_SESSION['isSortAsc'];

echo "<table>";

echo "<tr>
<th><a href='?sort=name&order=" . ($is_sort_asc ? "asc" : "desc") . "'>Name</a></th>
<th><a href='?sort=type&order=" . ($is_sort_asc ? "asc" : "desc") . "'>Type</a></th>
<th><a href='?sort=time&order=" . ($is_sort_asc ? "asc" : "desc") . "'>Upload Time</a></th>
<th><a href='?sort=size&order=" . ($is_sort_asc ? "asc" : "desc") . "'>Size</a></th>
</tr>";

foreach ($files as $file) {
  echo "<tr>
    <td>" . $file[0] . "</td>
    <td>" . $file[1] . "</td>
    <td>" . $file[2] . "</td>
    <td>" . $file[3] . "</td>
    </tr>";
}
echo "</table>";