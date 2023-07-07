#!/bin/bash
mount /auto/mz/cifs
php /auto/mz/generate-in-statement/GenerateINStatement.php
umount /auto/mz/cifs
