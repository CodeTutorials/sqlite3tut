<?
function cl( $input )
{
    $input = trim( htmlentities( strip_tags( $input,"," ) ) );

    if( get_magic_quotes_gpc() )
        $input = stripslashes( $input );

    $input = SQLite3::escapeString( $input );
$input = str_replace('http', ' ', $input);
$input = str_replace('https', ' ', $input);
$input = str_replace('a href', ' ', $input);
    return $input;
} 
?>