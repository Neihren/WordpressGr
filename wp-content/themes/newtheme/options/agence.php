<?php
class AgenceMenuPage
{
    const GROUP = 'agence_options';

    public static function register()
    {
        add_action('admin_menu', [self::class, 'addMenu']);
    }

    public static function addMenu()
    {
        add_options_page("Gestion de l'agence", "Agence", "manage_options", self::GROUP, [self::class, 'render']);
    }

    public static function render()
    {
?>
        <h2>Gestion de l'agence</h2>

        <form action="options.php" method="post">
            <?php settings_fields(self::GROUP) ?>
            <?php submit_button() ?>
        </form>
<?php
    }
}
