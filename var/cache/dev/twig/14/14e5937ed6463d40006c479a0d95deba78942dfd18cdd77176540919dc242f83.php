<?php

/* user/new.html.twig */
class __TwigTemplate_51997e897d8f804ce2757fd0580b25d449357f78a32636e09cfaf67e19094ee4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/new.html.twig", 1);
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
        $__internal_226fd98ced4806ba4116306aa91d2968a25e3b6ba0e24ef57504cf87c5c8fd2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_226fd98ced4806ba4116306aa91d2968a25e3b6ba0e24ef57504cf87c5c8fd2e->enter($__internal_226fd98ced4806ba4116306aa91d2968a25e3b6ba0e24ef57504cf87c5c8fd2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $__internal_d6d4c1a4d016c9c3553b90c9345659de9de5fa6adbfd0c5224482175b849ba19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6d4c1a4d016c9c3553b90c9345659de9de5fa6adbfd0c5224482175b849ba19->enter($__internal_d6d4c1a4d016c9c3553b90c9345659de9de5fa6adbfd0c5224482175b849ba19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_226fd98ced4806ba4116306aa91d2968a25e3b6ba0e24ef57504cf87c5c8fd2e->leave($__internal_226fd98ced4806ba4116306aa91d2968a25e3b6ba0e24ef57504cf87c5c8fd2e_prof);

        
        $__internal_d6d4c1a4d016c9c3553b90c9345659de9de5fa6adbfd0c5224482175b849ba19->leave($__internal_d6d4c1a4d016c9c3553b90c9345659de9de5fa6adbfd0c5224482175b849ba19_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d5c97148bdbb52f138bc521e0de4afbb7e654e13fa515b6b94dbbd4022ba04a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5c97148bdbb52f138bc521e0de4afbb7e654e13fa515b6b94dbbd4022ba04a3->enter($__internal_d5c97148bdbb52f138bc521e0de4afbb7e654e13fa515b6b94dbbd4022ba04a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4ff2a41be38f2205b3362e67e3d7f62eead5e052214cb8ac8e6823a329883f9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ff2a41be38f2205b3362e67e3d7f62eead5e052214cb8ac8e6823a329883f9c->enter($__internal_4ff2a41be38f2205b3362e67e3d7f62eead5e052214cb8ac8e6823a329883f9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_4ff2a41be38f2205b3362e67e3d7f62eead5e052214cb8ac8e6823a329883f9c->leave($__internal_4ff2a41be38f2205b3362e67e3d7f62eead5e052214cb8ac8e6823a329883f9c_prof);

        
        $__internal_d5c97148bdbb52f138bc521e0de4afbb7e654e13fa515b6b94dbbd4022ba04a3->leave($__internal_d5c97148bdbb52f138bc521e0de4afbb7e654e13fa515b6b94dbbd4022ba04a3_prof);

    }

    public function getTemplateName()
    {
        return "user/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>User creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('user_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "user/new.html.twig", "/var/www/html/flyaround/app/Resources/views/user/new.html.twig");
    }
}
