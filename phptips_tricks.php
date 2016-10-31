<?php
function foo($arg1 = '', $arg2 = '') {
  echo "arg1: $arg1\n";
  echo "arg2: $arg2\n";

}

foo('hello', 'world');
/* prints:
arg1: hello
arg2: world
*/
foo();
/* prints:
arg1:
arg2:
*/

echo '<br>';

function foo2(){
  $args = func_get_args();
  
  foreach($args as $k => $v) {
    echo "arg" . ($k+1) . ": $v\n";
  }
}
foo2();

foo2('hello');

foo2('hello', 'world', 'again');

echo '<br>';

$files = glob('*.php');

print_r($files);
echo '<br>';

$files = glob('*,{php,txt}', GLOB_BRACE);
print_r($files);
echo '<br>';

$files = glob('../*.php');
print_r($files);
echo '<br>';

echo "Initial: ".memory_get_usage()." bytes \n";

for ($i = 0; $i < 100000; $i++) {
  $array[]=md5($i);
}
for($i=0; $i<100000; $i++){
  unset($array[$i]);
}

echo "Final: ".memory_get_usage()." bytes \n";

echo "Peak: ".memory_get_peak_usage()." bytes \n";

echo '<br>';

print_r(getrusage());

echo '<br>';
sleep(3);

$data = getrusage();
echo "User time: ".
    ($data['ru_utime.tv_sec'] +
    $data['ru_utime.tv_usec'] /1000000);
echo "System time: ".
    ($data['ru_stime.tv_sec'] +
    $data['ru_stime.tv_usec'] / 1000000);

echo '<br>';
// loop 10 million times (busy)
for($i=0;$i<10000000;$i++) {
 
}
  
$data = getrusage();
echo "User time: ".
    ($data['ru_utime.tv_sec'] +
    $data['ru_utime.tv_usec'] / 1000000);
echo "System time: ".
    ($data['ru_stime.tv_sec'] +
    $data['ru_stime.tv_usec'] / 1000000);
    
echo '<br>';
$start = microtime(true);
// keep calling microtime for about 3 seconds
while(microtime(true) - $start < 3) {
 
 }
  
$data = getrusage();
echo "User time: ".
    ($data['ru_utime.tv_sec'] +
    $data['ru_utime.tv_usec'] / 1000000);
echo "System time: ".
    ($data['ru_stime.tv_sec'] +
    $data['ru_stime.tv_usec'] / 1000000);
echo '<br>';
my_debug("some debug message", __LINE__);
function my_debug($msg, $line) {
  echo "Line $line: $msg\n";
}

echo '<br>';
echo uniqid();
echo '<br>';
echo uniqid();
echo '<br>';
echo uniqid('foo_');
echo '<br>';
echo uniqid('',true);
echo '<br>';
echo uniqid('bar_',true);
echo '<br>';
$myvar = array(
  'hello',
  42,
  array(1, 'two'),
  'apple'
);

$string = serialize($myvar);
echo '<br>';
echo $string;

$newvar = unserialize($string);
echo '<br>';
print_r($newvar);

echo '<br>';
$string2 = json_encode($myvar);
echo $string2;

$newvar2 = json_decode($string2);
echo '<br>';
print_r($newvar2);

$longstring =
"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut elit id mi ultricies adipiscing. Nulla facilisi. Praesent pulvinar, sapien vel feugiat vestibulum, nulla dui pretium orcinon ultricies elit lacus quis ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam,pretium ullamcorper urna quis iaculis. Etiam ac massa sed turpis tempor luctus. Curabitur sed nibh eu elit  mollis congue. Praesent ipsum diam, consectetur vitae ornare a, aliquam a nunc. In id magna pellentesque tellus posuere adipiscing. Sed non mi metus, at lacinia augue. Sed magna nisi, ornare in mollis in, mollissed nunc. Etiam at justo in leo congue mollis. Nullam in neque eget metus hendrerit scelerisque eu non enim. Ut malesuada lacus eu nulla bibendum id euismod urna sodales. ";


$compressed = gzcompress($longstring);
echo '<br>';
echo "Original size: ". strlen($longstring)."\n";
echo "Compressed size: ". strlen($compressed)."\n";
echo '<br>';
$start_time = microtime(true);
register_shutdown_function('my_shutdown');
function my_shutdown() {
  global $start_time;
  
  echo "execution took: ".
         (microtime(true) - $start_time).
         " seconds.";
}
?>