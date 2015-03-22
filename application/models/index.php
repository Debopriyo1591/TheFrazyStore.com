<?php
    $this->db->from('Menu');
    $this->db->where('MenuParentID', 0);
    $menu_list = $this->db->get();

    foreach ($menu_list->result() as $menu): ?>
        <li>
            <a href=""><?php echo ucwords($menu->MenuTitle) ?></a>

            <?php

            $cat_id = $menu->MenuID;

            $this->db->from('SystemMenu');
            $this->db->where('MenuParentID', $cat_id);
            $submenu_list = $this->db->get();

            ?>
            <ul>
                <?php foreach ($submenu_list->result() as $submenu): ?>
                    <li>
                        <a href=""><?php echo ucwords($submenu->MenuTitle) ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </li>
    <?php endforeach; ?>