<div id="appview">
    <div id="listbox">
        <div id="list">
            <div id="listtabs" class="xtabs">
                <ul>
                <li><a href="">Inbox</a></li>
                <li><a href="">学习</a></li>
                <li><a href="">工作</a></li>
                </ul>
            </div>
        </div>
        <div id="listwrap">
            <?php echo $this->element('task_tools'); ?>
            <div id="midcontent">
                <div id="mind_border">
                 <?php echo
                    $this->element('task'); 
                    ?>
                </div>
            </div>
        </div>
    </div>
    <?php echo  $this->element('detailsbox'); ?>
    <!--<div id="detailsbox">
        <div id="details">
            <div id="detailstabs">
            </div>
            <div id="detailswrap">
                <div style="margin: 0pt; padding-top: 1.4em; clear: both;"  />
            </div>
        </div>
    </div>-->
</div>
