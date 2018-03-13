#!/bin/bash
mount /auto/mz/cifs
php /auto/mz/GenerateINStatement.php
umount /auto/mz/cifs
