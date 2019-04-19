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

/* Concert/index.html.twig */
class __TwigTemplate_b67b562e171a9bebd8a7422df49b11c0415c7ba5843303d568f1da1eef67a7e9 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "Concert/index.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Concert/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "公演情報";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<section id=\"home\" class=\"head-main-img\">
    <div class=\"container\">
        <div class=\"row text-center pad-row\">
            <div class=\"col-md-10 col-md-offset-1\">
                <h1><span class=\"back-light\">公演情報</span></h1>
            </div>
        </div>
    </div>
</section>

<section id=\"port-sec\">
    <div class=\"container\">
        <div class=\"row pad-row\" >
            <div class=\"col-md-12 col-sm-12\" >
                <ul class=\"portfolio-items col-3\">
                    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["concertList"] ?? $this->getContext($context, "concertList")));
        foreach ($context['_seq'] as $context["_key"] => $context["concertInfo"]) {
            // line 22
            echo "                    <li class=\"portfolio-item\">
                        <div class=\"item-main\">
                            <h5>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["concertInfo"], "date", []), "html", null, true);
            echo "<br />";
            echo twig_escape_filter($this->env, $this->getAttribute($context["concertInfo"], "place", []), "html", null, true);
            echo "</h5>
                            <ul class=\"plan\">
                                <li>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["concertInfo"], "date", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["concertInfo"], "time", []), "html", null, true);
            echo " 開演</li>
                                <li>";
            // line 27
            if (($this->getAttribute($context["concertInfo"], "available", []) != true)) {
                echo "満席";
            } else {
                echo "予約可能";
            }
            echo "</li>
                            </ul>
                        </div>
                    </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['concertInfo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                </ul>
            </div>
        </div>
    </div>
</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Concert/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 32,  103 => 27,  97 => 26,  90 => 24,  86 => 22,  82 => 21,  65 => 6,  59 => 5,  46 => 3,  22 => 1,);
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

{% block title %}公演情報{{ parent() }}{% endblock %}

{% block body %}
<section id=\"home\" class=\"head-main-img\">
    <div class=\"container\">
        <div class=\"row text-center pad-row\">
            <div class=\"col-md-10 col-md-offset-1\">
                <h1><span class=\"back-light\">公演情報</span></h1>
            </div>
        </div>
    </div>
</section>

<section id=\"port-sec\">
    <div class=\"container\">
        <div class=\"row pad-row\" >
            <div class=\"col-md-12 col-sm-12\" >
                <ul class=\"portfolio-items col-3\">
                    {% for concertInfo in concertList %}
                    <li class=\"portfolio-item\">
                        <div class=\"item-main\">
                            <h5>{{ concertInfo.date }}<br />{{ concertInfo.place }}</h5>
                            <ul class=\"plan\">
                                <li>{{ concertInfo.date }} {{ concertInfo.time }} 開演</li>
                                <li>{% if concertInfo.available != true %}満席{% else %}予約可能{% endif %}</li>
                            </ul>
                        </div>
                    </li>
                    {% endfor %}
                </ul>
            </div>
        </div>
    </div>
</section>
{% endblock %}
", "Concert/index.html.twig", "/Users/xearts/Desktop/Hagiwara Shion/tutorial_symphony2.7/app/Resources/views/Concert/index.html.twig");
    }
}
