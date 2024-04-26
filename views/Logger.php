<?php
$logDirectory = '../../logs/';
$logs = scandir($logDirectory);
?>

<section>
    <h3>Log Files</h3>
    <table>
      <thead>
        <tr>
          <th>File Name</th>
          <th>Last Updated</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php
          foreach ($logs as $file) {
            if ($file !== '.' && $file !== '..') {
              $filePath = $logDirectory . $file;
              
              $extension = pathinfo($file, PATHINFO_EXTENSION);
              if ($extension !== 'log') {
                  continue;
              }
              
              echo "<tr>
                      <td>$file</td>
                      <td>" . date("Y-m-d H:i:s", filemtime($filePath)) . "</td>
                      <td style='text-align: right;'>
                        <button onclick=\"downloadLog('$file')\">Download</button>
                        <button onclick=\"previewLog('$file')\">Preview</button>
                      </td>
                    </tr>";
            }
          }
        ?>
      </tbody>
    </table>
</section>

<section>
    <h3>Preview</h3>
    <div id="previewBox"></div>
</section>
