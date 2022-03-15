<p align="center"><a href="https://www.diagro.be" target="_blank"><img src="https://diagro.be/assets/img/diagro-logo.svg" width="400"></a></p>

<p align="center">
<img src="https://img.shields.io/badge/project-lib_php_chart-yellowgreen" alt="PHP chart library">
<img src="https://img.shields.io/badge/type-library-informational" alt="Diagro library">
<img src="https://img.shields.io/badge/php-8.0-blueviolet" alt="PHP">
<img src="https://img.shields.io/badge/chartjs-3.3.0-orange" alt="chartjs">
</p>

## Description

Create charts with ChartJS through PHP. You make the chart in PHP code and serialize it to Javascript.
In Javascript you create the chart by deserialize the output of the PHP Chart class.

The Manager class holds the graphs and is responsible for rendering.

```js
$("canvas[id^='chart_']").each(function(idx, el) {
	new Chart(
		$(el).attr('id'), 
		$.parseJSON(atob($(el).data('chart')))
	);
});
```

If you use Laravel. Simply register the Manager class in the AppServiceProvider.

```php
public function register()
{
	$this->app->singleton('charts', \Diagro\Chart\Manager::class);
}
```

In a blade view:

```
{{ app('charts')->render('chart_id') }}
```

Or register a stringable blade like:

```php
Blade::stringable(\Diagro\Chart\Chart::class, function($chart) {
    return app('charts')->render($chart->id);
});
```

Example:

```php
$chart = new Chart('messages_per_time', Chart::TYPE_BAR);
$chart->labels = array_keys($per_datetime);
$chart->datasets[0] = new \Diagro\Chart\Datasets\Bar('Aantal per tijdstip');
$chart->datasets[0]->data = array_values($per_datetime);
$chart->datasets[0]->background_color = [
	new \Diagro\Chart\Color\RGBA(255,99,132,0.2),
	new \Diagro\Chart\Color\RGBA(54,162,235,0.2)
];
$chart->datasets[0]->border_color = [
	new \Diagro\Chart\Color\RGBA(255,99,132,1),
	new \Diagro\Chart\Color\RGBA(54,162,235,1)
];
$chart->datasets[0]->border_width = 1;

$chart->options->plugins->legend->display = false;
```