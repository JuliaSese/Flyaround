<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_66869ba7eff9fd715468a31dfed603debc51a886aad83e18551ac236ba3e16e9 extends Twig_Template
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
        $__internal_32a2576d723e5963977e1d781abedd85af7bf8622e4c2fc09c1334fafb7d1efa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32a2576d723e5963977e1d781abedd85af7bf8622e4c2fc09c1334fafb7d1efa->enter($__internal_32a2576d723e5963977e1d781abedd85af7bf8622e4c2fc09c1334fafb7d1efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_ad08fc23b27d1ca918bf71b6903b43e6acaab93c3c8331e86be121b731b810b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad08fc23b27d1ca918bf71b6903b43e6acaab93c3c8331e86be121b731b810b4->enter($__internal_ad08fc23b27d1ca918bf71b6903b43e6acaab93c3c8331e86be121b731b810b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_32a2576d723e5963977e1d781abedd85af7bf8622e4c2fc09c1334fafb7d1efa->leave($__internal_32a2576d723e5963977e1d781abedd85af7bf8622e4c2fc09c1334fafb7d1efa_prof);

        
        $__internal_ad08fc23b27d1ca918bf71b6903b43e6acaab93c3c8331e86be121b731b810b4->leave($__internal_ad08fc23b27d1ca918bf71b6903b43e6acaab93c3c8331e86be121b731b810b4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/flyaround/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
