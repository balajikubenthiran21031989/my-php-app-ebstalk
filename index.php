<?
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
  $file = '/tmp/sample-app.log';
  $message = file_get_contents('php://input');
  file_put_contents($file, date('Y-m-d H:i:s') . " Received message: " . $message . "\n", FILE_APPEND);
}
else
{
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>MY PHP Application</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster+Two" type="text/css">
    <link rel="icon" href="https://awsmedia.s3.amazonaws.com/favicon.ico" type="image/ico" >
    <link rel="shortcut icon" href="https://awsmedia.s3.amazonaws.com/favicon.ico" type="image/ico" >
    <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="/styles.css" type="text/css">
</head>
<body>
    <section class="congratulations">
        <h1>Hi Buddy!</h1>
        <p>Its Your<em> Updated Hello World PHP</em> appl KBPL&nbsp;Cloud</p>
        <p>PHP version <?= phpversion() ?></p>
        <p>Copy Rights @http://kbpl.us-east-1.elasticbeanstalk.com/</p>
    </section>

    <section class="instructions">
        <h2>Create Your World</h2>
        <ul>
            <li><a href="http://docs.amazonwebservices.com/elasticbeanstalk/latest/dg/">About US</a></li>
            <li><a href="http://docs.amazonwebservices.com/elasticbeanstalk/latest/dg/create_deploy_PHP_eb.html">Our Services</a></li>
            <li><a href="http://docs.amazonwebservices.com/elasticbeanstalk/latest/dg/create_deploy_PHP.rds.html">Our Products</a>
            <li><a href="http://docs.amazonwebservices.com/elasticbeanstalk/latest/dg/customize-containers-ec2.html">Achievements</a></li>
            <li><a href="http://docs.amazonwebservices.com/elasticbeanstalk/latest/dg/customize-containers-resources.html">Contact Us</a></li>
        </ul>

        <h2>Our Branches</h2>
        <ul>
            <li><a href="http://aws.amazon.com/sdkforphp">United States</a></li>
            <li><a href="http://aws.amazon.com/php">United Kingdom</a></li>
            <li><a href="https://github.com/aws/aws-sdk-php">Singapore</a></li>
        </ul>
    </section>

    <!--[if lt IE 9]><script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script><![endif]-->
</body>
</html>
<? 
} 
?>
