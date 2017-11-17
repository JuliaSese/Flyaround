<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_4599f3ba6c6fa4e8c3dc357717f7e76ac0261e000440ef63937334e17c46b88c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fa2bbf1902a29438499431545c97f4543eb4a8907f54f1e01dc892a699217a91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa2bbf1902a29438499431545c97f4543eb4a8907f54f1e01dc892a699217a91->enter($__internal_fa2bbf1902a29438499431545c97f4543eb4a8907f54f1e01dc892a699217a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_88d84e58dd1fbde91be590217c704a5cd8c7035c906232dac4b8cc5b3fdb86ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88d84e58dd1fbde91be590217c704a5cd8c7035c906232dac4b8cc5b3fdb86ae->enter($__internal_88d84e58dd1fbde91be590217c704a5cd8c7035c906232dac4b8cc5b3fdb86ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_fa2bbf1902a29438499431545c97f4543eb4a8907f54f1e01dc892a699217a91->leave($__internal_fa2bbf1902a29438499431545c97f4543eb4a8907f54f1e01dc892a699217a91_prof);

        
        $__internal_88d84e58dd1fbde91be590217c704a5cd8c7035c906232dac4b8cc5b3fdb86ae->leave($__internal_88d84e58dd1fbde91be590217c704a5cd8c7035c906232dac4b8cc5b3fdb86ae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/html/flyaround/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
