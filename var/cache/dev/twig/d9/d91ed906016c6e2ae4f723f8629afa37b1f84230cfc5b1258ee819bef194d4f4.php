<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_ca22c6ed7129b14750fa99a4627e4d14f1a188f5721b3fd8e0738d0dc1cc6940 extends Twig_Template
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
        $__internal_355b1ecb93d49529cd00b6c705c57c84e481f94fe6c26e7dcba19e958d14429b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_355b1ecb93d49529cd00b6c705c57c84e481f94fe6c26e7dcba19e958d14429b->enter($__internal_355b1ecb93d49529cd00b6c705c57c84e481f94fe6c26e7dcba19e958d14429b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_f64dcef00e992d66ba66c50a29a1ace7c12bfc952d870d425087fdbb060b2602 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f64dcef00e992d66ba66c50a29a1ace7c12bfc952d870d425087fdbb060b2602->enter($__internal_f64dcef00e992d66ba66c50a29a1ace7c12bfc952d870d425087fdbb060b2602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_355b1ecb93d49529cd00b6c705c57c84e481f94fe6c26e7dcba19e958d14429b->leave($__internal_355b1ecb93d49529cd00b6c705c57c84e481f94fe6c26e7dcba19e958d14429b_prof);

        
        $__internal_f64dcef00e992d66ba66c50a29a1ace7c12bfc952d870d425087fdbb060b2602->leave($__internal_f64dcef00e992d66ba66c50a29a1ace7c12bfc952d870d425087fdbb060b2602_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/html/flyaround/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
