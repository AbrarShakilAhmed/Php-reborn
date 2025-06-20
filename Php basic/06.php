<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <?php $num = 4; ?>
    <?php if($num>70):?>
      <strong>A</strong>
    <?php elseif($num >60):?>
      <strong>B</strong>
    <?php elseif($num >50):?>
      <strong>c</strong>
    <?php elseif($num >40):?>
      <strong>D</strong>
    <?php elseif($num >33):?>
      <strong>E</strong>
    <?php else:?>
      <strong>F</strong>
    <?php endif?>
    <h2>end</h2>
</body>
</html>