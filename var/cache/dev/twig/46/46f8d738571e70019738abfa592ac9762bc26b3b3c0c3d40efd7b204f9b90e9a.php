<?php

/* :review:edit.html.twig */
class __TwigTemplate_0a8df088ae7e1822970c3cf2aec363f0b9e0bfe91f2e68052608a5a3a0745b05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":review:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9948047177c060d6d9ac34671a492e327620c0b169450503efecc85d13bedff7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9948047177c060d6d9ac34671a492e327620c0b169450503efecc85d13bedff7->enter($__internal_9948047177c060d6d9ac34671a492e327620c0b169450503efecc85d13bedff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":review:edit.html.twig"));

        $__internal_c7619261065352f8f243af6d01e4d3a916281feeef9fa2890b0ca08b7c0e9662 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7619261065352f8f243af6d01e4d3a916281feeef9fa2890b0ca08b7c0e9662->enter($__internal_c7619261065352f8f243af6d01e4d3a916281feeef9fa2890b0ca08b7c0e9662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":review:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9948047177c060d6d9ac34671a492e327620c0b169450503efecc85d13bedff7->leave($__internal_9948047177c060d6d9ac34671a492e327620c0b169450503efecc85d13bedff7_prof);

        
        $__internal_c7619261065352f8f243af6d01e4d3a916281feeef9fa2890b0ca08b7c0e9662->leave($__internal_c7619261065352f8f243af6d01e4d3a916281feeef9fa2890b0ca08b7c0e9662_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_46f952e0a8c90d758f3d160a7376ca9365b277a7c2e769dfa5ebb0d864640cbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46f952e0a8c90d758f3d160a7376ca9365b277a7c2e769dfa5ebb0d864640cbc->enter($__internal_46f952e0a8c90d758f3d160a7376ca9365b277a7c2e769dfa5ebb0d864640cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_304e03bf249748954b6b54d716a6febd559eb4cf80edd7b0975fdd1038f6a8f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_304e03bf249748954b6b54d716a6febd559eb4cf80edd7b0975fdd1038f6a8f1->enter($__internal_304e03bf249748954b6b54d716a6febd559eb4cf80edd7b0975fdd1038f6a8f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Review edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("review_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_304e03bf249748954b6b54d716a6febd559eb4cf80edd7b0975fdd1038f6a8f1->leave($__internal_304e03bf249748954b6b54d716a6febd559eb4cf80edd7b0975fdd1038f6a8f1_prof);

        
        $__internal_46f952e0a8c90d758f3d160a7376ca9365b277a7c2e769dfa5ebb0d864640cbc->leave($__internal_46f952e0a8c90d758f3d160a7376ca9365b277a7c2e769dfa5ebb0d864640cbc_prof);

    }

    public function getTemplateName()
    {
        return ":review:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Review edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('review_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":review:edit.html.twig", "/var/www/html/flyaround/app/Resources/views/review/edit.html.twig");
    }
}
