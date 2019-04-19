<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Common/navbar.html.twig */
class __TwigTemplate_e1428fbaf7834749a620edec44178c1b7841a9e8fc52648f8b91a690474edde7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Common/navbar.html.twig"));

        // line 1
        echo "<div class=\"navbar navbar-inverse navbar-fixed-top\" >
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_toppage_index");
        echo "\"><i class=\"fa fa-music\"></i>クラシックシンフォニー楽団</a>
        </div>
        <div class=\"navbar-collapse collapse\">
            <ul class=\"nav navbar-nav navbar-right\">
                <li><a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_toppage_index");
        echo "\">トップ</a></li>
                <li><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_concert_index");
        echo "\">公演情報</a></li>
                <li><a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_toppage_index");
        echo "\">楽団プロフィール</a></li>
                <li><a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_toppage_index");
        echo "\">ブログ</a></li>
                <li><a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_toppage_index");
        echo "\">お問い合わせ</a></li>
            </ul>
        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Common/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 17,  62 => 16,  58 => 15,  54 => 14,  50 => 13,  43 => 9,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"navbar navbar-inverse navbar-fixed-top\" >
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"{{ path(\"app_toppage_index\") }}\"><i class=\"fa fa-music\"></i>クラシックシンフォニー楽団</a>
        </div>
        <div class=\"navbar-collapse collapse\">
            <ul class=\"nav navbar-nav navbar-right\">
                <li><a href=\"{{ path(\"app_toppage_index\") }}\">トップ</a></li>
                <li><a href=\"{{ path(\"app_concert_index\") }}\">公演情報</a></li>
                <li><a href=\"{{ path(\"app_toppage_index\") }}\">楽団プロフィール</a></li>
                <li><a href=\"{{ path(\"app_toppage_index\") }}\">ブログ</a></li>
                <li><a href=\"{{ path(\"app_toppage_index\") }}\">お問い合わせ</a></li>
            </ul>
        </div>
    </div>
</div>
", "Common/navbar.html.twig", "/Users/xearts/Desktop/Hagiwara Shion/tutorial_symphony2.7/app/Resources/views/Common/navbar.html.twig");
    }
}
