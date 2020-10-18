<nav class="navbar navbar-expand-lg navbar-success bg-dark">
    <?php echo anchor('/', 'Domů', array("class" => "navbar-brand")); ?>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <!--<li class="nav-item">
                <?php //echo anchor('/', 'Odkaz1', array("class" => "nav-link")); ?>
            </li> -->
            <li class="nav-item">
                <?php echo anchor('/skoly', 'Školy', array("class" => "nav-link")); ?>
            </li>
            <li class="nav-item">
                <?php echo anchor('/obory', 'Obory', array("class" => "nav-link")); ?>
            </li>
            <li class="nav-item">
                <?php echo anchor('/pocet-prijatych', 'Počet přijatých', array("class" => "nav-link")); ?>
            </li>
            <li class="nav-item">
                <?php echo anchor('/zpetne-vazby', 'Zpětné vazby', array("class" => "nav-link")); ?>
            </li>
            <li class="nav-item">
                <?php echo anchor('/mapa', 'Mapa', array("class" => "nav-link")); ?>
            </li>
             
        </ul>
    </div>
</nav>

<div class="container">
        
