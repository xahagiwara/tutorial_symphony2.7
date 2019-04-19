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

/* Toppage/index.html.twig */
class __TwigTemplate_727d0fcc2bc7c986867282aa03a782da080ffe72dfff13de6922db665a4d0236 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "Toppage/index.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Toppage/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "トップページ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<section id=\"home\" class=\"text-center\">
    <div id=\"carousel-example\" class=\"carousel slide\" data-ride=\"carousel\">
        <div class=\"carousel-inner\">
            <div class=\"item active\">
                <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/top/1.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
                <div class=\"carousel-caption\">
                    <h4 class=\"back-light\">歴史と調和するシンフォニー、音楽で未来へつなぐ</h4>
                </div>
            </div>
        </div>
    </div>
</section>

<section id=\"just-intro\">
    <div class=\"container\">
        <div class=\"row text-center pad-row\">
            <div class=\"col-md-4 col-sm-4\">
                <i class=\"fa fa-tasks fa-5x\"></i>
                <h4><strong>公演情報</strong></h4>
                <p>
                    クラシックシンフォニー楽団は、定期演奏会を年に1回開催しています。
                    また、各地のコンサートホールでの公演も随時行っています。
                </p>
                <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_concert_index");
        echo "\" class=\"btn btn-primary\">詳細</a>
            </div>
            <div class=\"col-md-4 col-sm-4\">
                <i class=\"fa fa-group fa-5x\"></i>
                <h4><strong>楽団プロフィール</strong></h4>
                <p>
                    クラシックシンフォニー楽団の創立からの歴史や楽団のポリシーなどを紹介します。
                    楽団メンバーのプロフィールも掲載しています。
                </p>
                <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_toppage_index");
        echo "\" class=\"btn btn-primary\">詳細</a>
            </div>
            <div class=\"col-md-4 col-sm-4\">
                <i class=\"fa fa-comments fa-5x\"></i>
                <h4><strong>ブログ</strong></h4>
                <p>
                    クラシックシンフォニー楽団の活動報告や、コンサートの舞台裏、普段の練習風景、
                    団員の音楽に対する思いを綴っています。
                </p>
                <a href=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_toppage_index");
        echo "\" class=\"btn btn-primary\">詳細</a>
            </div>
        </div>
    </div>
</section>

";
        // line 53
        echo twig_include($this->env, $context, "Common/infomation.html.twig");
        echo "
<p><a href=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_concert_index");
        echo "\">公演情報はこちら</a></p>

";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Blog:latestList"));
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Toppage/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 56,  130 => 54,  126 => 53,  117 => 47,  105 => 38,  93 => 29,  71 => 10,  65 => 6,  59 => 5,  46 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}

{% block title %}トップページ{{ parent() }}{% endblock %}

{% block body %}
<section id=\"home\" class=\"text-center\">
    <div id=\"carousel-example\" class=\"carousel slide\" data-ride=\"carousel\">
        <div class=\"carousel-inner\">
            <div class=\"item active\">
                <img src=\"{{ asset(\"img/top/1.jpg\") }}\" alt=\"\"/>
                <div class=\"carousel-caption\">
                    <h4 class=\"back-light\">歴史と調和するシンフォニー、音楽で未来へつなぐ</h4>
                </div>
            </div>
        </div>
    </div>
</section>

<section id=\"just-intro\">
    <div class=\"container\">
        <div class=\"row text-center pad-row\">
            <div class=\"col-md-4 col-sm-4\">
                <i class=\"fa fa-tasks fa-5x\"></i>
                <h4><strong>公演情報</strong></h4>
                <p>
                    クラシックシンフォニー楽団は、定期演奏会を年に1回開催しています。
                    また、各地のコンサートホールでの公演も随時行っています。
                </p>
                <a href=\"{{ path(\"app_concert_index\") }}\" class=\"btn btn-primary\">詳細</a>
            </div>
            <div class=\"col-md-4 col-sm-4\">
                <i class=\"fa fa-group fa-5x\"></i>
                <h4><strong>楽団プロフィール</strong></h4>
                <p>
                    クラシックシンフォニー楽団の創立からの歴史や楽団のポリシーなどを紹介します。
                    楽団メンバーのプロフィールも掲載しています。
                </p>
                <a href=\"{{ path(\"app_toppage_index\") }}\" class=\"btn btn-primary\">詳細</a>
            </div>
            <div class=\"col-md-4 col-sm-4\">
                <i class=\"fa fa-comments fa-5x\"></i>
                <h4><strong>ブログ</strong></h4>
                <p>
                    クラシックシンフォニー楽団の活動報告や、コンサートの舞台裏、普段の練習風景、
                    団員の音楽に対する思いを綴っています。
                </p>
                <a href=\"{{ path(\"app_toppage_index\") }}\" class=\"btn btn-primary\">詳細</a>
            </div>
        </div>
    </div>
</section>

{{ include(\"Common/infomation.html.twig\") }}
<p><a href=\"{{ path(\"app_concert_index\") }}\">公演情報はこちら</a></p>

{{ render(controller(\"AppBundle:Blog:latestList\")) }}
{% endblock %}
", "Toppage/index.html.twig", "/Users/xearts/Desktop/Hagiwara Shion/tutorial_symphony2.7/app/Resources/views/Toppage/index.html.twig");
    }
}
