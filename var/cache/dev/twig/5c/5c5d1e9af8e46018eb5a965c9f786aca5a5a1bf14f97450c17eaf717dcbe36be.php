<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_3dac9b7a7409bed7d30a03d5c40b31143f041c0a5ac8e16cdf1d670dacd9efff extends Twig_Template
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
        $__internal_84814254b69e0bf9872414f78e41376a229cebd9b3a1aad2e633385bc09e3be6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84814254b69e0bf9872414f78e41376a229cebd9b3a1aad2e633385bc09e3be6->enter($__internal_84814254b69e0bf9872414f78e41376a229cebd9b3a1aad2e633385bc09e3be6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_74ac37fc17aa346a952be50bd2e6a6222f1165794875314690c43e8832e20eb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74ac37fc17aa346a952be50bd2e6a6222f1165794875314690c43e8832e20eb8->enter($__internal_74ac37fc17aa346a952be50bd2e6a6222f1165794875314690c43e8832e20eb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_84814254b69e0bf9872414f78e41376a229cebd9b3a1aad2e633385bc09e3be6->leave($__internal_84814254b69e0bf9872414f78e41376a229cebd9b3a1aad2e633385bc09e3be6_prof);

        
        $__internal_74ac37fc17aa346a952be50bd2e6a6222f1165794875314690c43e8832e20eb8->leave($__internal_74ac37fc17aa346a952be50bd2e6a6222f1165794875314690c43e8832e20eb8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/var/www/html/flyaround/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
