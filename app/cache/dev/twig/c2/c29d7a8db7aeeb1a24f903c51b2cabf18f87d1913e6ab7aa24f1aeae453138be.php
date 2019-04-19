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

/* Inquiry/index.html.twig */
class __TwigTemplate_b5d531323783224c1292a7151ef9f28bfc9b9e09e226bdc956a6e13b7343e38a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "Inquiry/index.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Inquiry/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "お問い合わせ";
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
                <h1><span class=\"back-light\">お問い合わせ</span></h1>
            </div>
        </div>
    </div>
</section>

<section id=\"inquiry-sec\">
    <div class=\"container\">
        <div class=\"row pad-row\">
            ";
        // line 19
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
            <table class=\"table\">
                <tr>
                    <th><i class=\"fa fa-circle\"> お名前</i></th>
                    <td>
                        <!--フォーム要素のウィジットを、class属性を追加して出力-->
                        ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", []), 'widget', ["after" => ["class" => "form-control"]]);
        echo "
                        <!--フォーム要素のエラーを出力-->
                        ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", []), 'errors');
        echo "
                    </td>
                </tr>
                <tr>
                    <th><i class=\"fa fa-circle\"> メールアドレス</i></th>
                    <td>
                        ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", []), 'errors');
        echo "
                    </td>
                </tr>
                <tr>
                    <th><i class=\"fa fa-circle-o\"> 電話番号</i></th>
                    <td>
                        ";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tel", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        ";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tel", []), 'errors');
        echo "
                    </td>
                </tr>
                <tr>
                    <th><i class=\"fa fa-circle\"> お問い合わせ種別</i></th>
                    <td>
                        ";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        ";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", []), 'errors');
        echo "
                    </td>
                </tr>
                <tr>
                    <th><i class=\"fa fa-circle\"> お問い合わせ内容</i></th>
                    <td>
                        ";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "content", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        ";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "content", []), 'errors');
        echo "
                    </td>
                </tr>
            </table>
            <div class=\"text-center\">
                ";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "submit", []), 'widget', ["attr" => ["class" => "btn btn-primary"]]);
        echo "
            </div>
            ";
        // line 62
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Inquiry/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 62,  154 => 60,  146 => 55,  142 => 54,  133 => 48,  129 => 47,  120 => 41,  116 => 40,  107 => 34,  103 => 33,  94 => 27,  89 => 25,  80 => 19,  65 => 6,  59 => 5,  46 => 3,  22 => 1,);
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

{% block title %}お問い合わせ{{ parent() }}{% endblock %}

{% block body %}
<section id=\"home\" class=\"head-main-img\">
    <div class=\"container\">
        <div class=\"row text-center pad-row\">
            <div class=\"col-md-10 col-md-offset-1\">
                <h1><span class=\"back-light\">お問い合わせ</span></h1>
            </div>
        </div>
    </div>
</section>

<section id=\"inquiry-sec\">
    <div class=\"container\">
        <div class=\"row pad-row\">
            {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
            <table class=\"table\">
                <tr>
                    <th><i class=\"fa fa-circle\"> お名前</i></th>
                    <td>
                        <!--フォーム要素のウィジットを、class属性を追加して出力-->
                        {{ form_widget(form.name, {\"after\": {\"class\" : \"form-control\"}}) }}
                        <!--フォーム要素のエラーを出力-->
                        {{ form_errors(form.name) }}
                    </td>
                </tr>
                <tr>
                    <th><i class=\"fa fa-circle\"> メールアドレス</i></th>
                    <td>
                        {{ form_widget(form.email, {\"attr\": {\"class\" : \"form-control\"}}) }}
                        {{ form_errors(form.email) }}
                    </td>
                </tr>
                <tr>
                    <th><i class=\"fa fa-circle-o\"> 電話番号</i></th>
                    <td>
                        {{ form_widget(form.tel, {\"attr\": {\"class\" : \"form-control\"}}) }}
                        {{ form_errors(form.tel) }}
                    </td>
                </tr>
                <tr>
                    <th><i class=\"fa fa-circle\"> お問い合わせ種別</i></th>
                    <td>
                        {{ form_widget(form.type, {\"attr\": {\"class\" : \"form-control\"}}) }}
                        {{ form_errors(form.type) }}
                    </td>
                </tr>
                <tr>
                    <th><i class=\"fa fa-circle\"> お問い合わせ内容</i></th>
                    <td>
                        {{ form_widget(form.content, {\"attr\": {\"class\" : \"form-control\"}}) }}
                        {{ form_errors(form.content) }}
                    </td>
                </tr>
            </table>
            <div class=\"text-center\">
                {{ form_widget(form.submit, {\"attr\": {\"class\": \"btn btn-primary\"}}) }}
            </div>
            {{ form_end(form) }}
        </div>
    </div>
</section>
{% endblock %}", "Inquiry/index.html.twig", "/Users/xearts/Desktop/Hagiwara Shion/tutorial_symphony2.7/app/Resources/views/Inquiry/index.html.twig");
    }
}
