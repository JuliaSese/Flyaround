<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_5ace0514ac51dddf7015e278581d1ccbc34e9ce9c04fa0c5adac0bc55a3fad5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0414acad481911236e31a52a0712fa9821a0d922c08cde5795a5f0d39f56c5c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0414acad481911236e31a52a0712fa9821a0d922c08cde5795a5f0d39f56c5c8->enter($__internal_0414acad481911236e31a52a0712fa9821a0d922c08cde5795a5f0d39f56c5c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_1be47d88da6661bd3543a0758533d76b408e875dbe72e5ee78c691120f536c1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1be47d88da6661bd3543a0758533d76b408e875dbe72e5ee78c691120f536c1f->enter($__internal_1be47d88da6661bd3543a0758533d76b408e875dbe72e5ee78c691120f536c1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0414acad481911236e31a52a0712fa9821a0d922c08cde5795a5f0d39f56c5c8->leave($__internal_0414acad481911236e31a52a0712fa9821a0d922c08cde5795a5f0d39f56c5c8_prof);

        
        $__internal_1be47d88da6661bd3543a0758533d76b408e875dbe72e5ee78c691120f536c1f->leave($__internal_1be47d88da6661bd3543a0758533d76b408e875dbe72e5ee78c691120f536c1f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_113d91d38c1f83f41c22c350343f4aa2312dd1d24c2c25a7e6f15becea080ef8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_113d91d38c1f83f41c22c350343f4aa2312dd1d24c2c25a7e6f15becea080ef8->enter($__internal_113d91d38c1f83f41c22c350343f4aa2312dd1d24c2c25a7e6f15becea080ef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3e846fa9a0fc829ccb864b43f3fa2edc46e990c85bc3a460c8aa672f648d3c82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e846fa9a0fc829ccb864b43f3fa2edc46e990c85bc3a460c8aa672f648d3c82->enter($__internal_3e846fa9a0fc829ccb864b43f3fa2edc46e990c85bc3a460c8aa672f648d3c82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_3e846fa9a0fc829ccb864b43f3fa2edc46e990c85bc3a460c8aa672f648d3c82->leave($__internal_3e846fa9a0fc829ccb864b43f3fa2edc46e990c85bc3a460c8aa672f648d3c82_prof);

        
        $__internal_113d91d38c1f83f41c22c350343f4aa2312dd1d24c2c25a7e6f15becea080ef8->leave($__internal_113d91d38c1f83f41c22c350343f4aa2312dd1d24c2c25a7e6f15becea080ef8_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_bdaea98165b05ce47423ce073365009cd18dd3790f8af918f6a08a009444c4d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdaea98165b05ce47423ce073365009cd18dd3790f8af918f6a08a009444c4d4->enter($__internal_bdaea98165b05ce47423ce073365009cd18dd3790f8af918f6a08a009444c4d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_81da88e08fcf666a0aa0436896fb5067c0166072766549c4fbe283248ac23ada = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81da88e08fcf666a0aa0436896fb5067c0166072766549c4fbe283248ac23ada->enter($__internal_81da88e08fcf666a0aa0436896fb5067c0166072766549c4fbe283248ac23ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_81da88e08fcf666a0aa0436896fb5067c0166072766549c4fbe283248ac23ada->leave($__internal_81da88e08fcf666a0aa0436896fb5067c0166072766549c4fbe283248ac23ada_prof);

        
        $__internal_bdaea98165b05ce47423ce073365009cd18dd3790f8af918f6a08a009444c4d4->leave($__internal_bdaea98165b05ce47423ce073365009cd18dd3790f8af918f6a08a009444c4d4_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f9ee3626c3e161bba88a7626e4afabb63097832517243df39422d726d502af7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f9ee3626c3e161bba88a7626e4afabb63097832517243df39422d726d502af7->enter($__internal_9f9ee3626c3e161bba88a7626e4afabb63097832517243df39422d726d502af7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a4cfa162e782a3b11815066fb7af4a964f964ac49a1040613495f62eec5dcfc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4cfa162e782a3b11815066fb7af4a964f964ac49a1040613495f62eec5dcfc5->enter($__internal_a4cfa162e782a3b11815066fb7af4a964f964ac49a1040613495f62eec5dcfc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_a4cfa162e782a3b11815066fb7af4a964f964ac49a1040613495f62eec5dcfc5->leave($__internal_a4cfa162e782a3b11815066fb7af4a964f964ac49a1040613495f62eec5dcfc5_prof);

        
        $__internal_9f9ee3626c3e161bba88a7626e4afabb63097832517243df39422d726d502af7->leave($__internal_9f9ee3626c3e161bba88a7626e4afabb63097832517243df39422d726d502af7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/html/flyaround/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
