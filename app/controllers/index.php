<?php
$categories = get_categories($conn);
$popular = most_popular($conn);
$recent = recent($conn);
$custom = custom_posts($conn);