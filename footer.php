<div id="footer">
    <a href="http://oyeme.tumblr.com" target="new">hawa</a> + <a href="http://toniab.com" target="new">tonia</a> = <a href="http://browntourage.com">browntourage</a>
    <br />
    <a href="<?php echo($_SERVER['DOCUMENT_ROOT'] . '/../'); ?>about.php">about</a> - <a href="<?php echo($_SERVER['DOCUMENT_ROOT'] . '/../'); ?>archive.php">exhibits</a> - <a href="<?php echo($_SERVER['DOCUMENT_ROOT'] . '/../'); ?>guests.php">guests</a>
</div>
<script type="text/javascript" language="javascript">
function changeColor(idObj,colorObj)
{
    document.getElementById(idObj.id).style.color = colorObj;
}

$(".expandable").on('click', function(){
    $this = $(this);
    if ($this.hasClass('expanded')) {
        $this.removeClass('expanded');
        $this.css('width', $this.attr('set_width'));
    } else {
        $this.addClass('expanded');
        $(this).css('width', 'auto');
    }
});

</script>