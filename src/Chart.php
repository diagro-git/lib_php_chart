<?php
namespace Diagro\Chart;

use JsonSerializable;

/**
 * ChartJS class helper
 * Make the life of the programmer easy
 *
 * @package Diagro
 */
class Chart implements JsonSerializable
{


    /**
     * Chart types
     */
    const TYPE_LINE     = 'line';
    const TYPE_BAR      = 'bar';
    const TYPE_PIE      = 'pie';
    const TYPE_DOUGHNUT = 'doughnut';


    /**
     * @var string
     */
    public string $id;

    /**
     * @var string|null
     */
    public ?string $type = null;

    /**
     * @var string[]
     */
    public array $labels = [];

    /**
     * @var Dataset[]
     */
    public array $datasets = [];

    /**
     * @var Options
     */
    public Options $options;


    public function __construct(string $id, ?string $type = null)
    {
        $this->id = $id;
        $this->type = $type;
        $this->options = new Options();
    }


    public function setLabels(array $labels) : self
    {
        $this->labels = $labels;
        return $this;
    }


    public function setLabel(string $label) : self
    {
        $this->labels[] = $label;
        return $this;
    }


    public function removeLabel(string $label) : self
    {
        if($this->hasLabel($label)) {
            unset($this->labels[$label]);
        }

        return $this;
    }


    public function hasLabel(string $label) : bool
    {
        return isset($this->labels[$label]);
    }


    public function setLabelBefore(string $label, string $before) : self
    {
        if(($idx = array_search($before, $this->labels)) !== false) {
            $labels = [];
            $c = count($this->labels);
            for($i = 0 ; $i < $idx ; $i++) {
                $labels[] = $this->labels[$i];
            }
            $labels[] = $label;
            for($i = $idx ; $i < $c ; $i++) {
                $labels[] = $this->labels[$i];
            }
            $this->labels = $labels;
        }

        return $this;
    }


    public function setLabelAfter(string $label, string $after) : self
    {
        if(($idx = array_search($after, $this->labels)) !== false) {
            $labels = [];
            $c = count($this->labels);
            for($i = 0 ; $i <= $idx ; $i++) {
                $labels[] = $this->labels[$i];
            }
            $idx += 1;
            $labels[] = $label;
            for($i = $idx ; $i < $c ; $i++) {
                $labels[] = $this->labels[$i];
            }
            $this->labels = $labels;
        }

        return $this;
    }


    public function setDatasets(array $datasets) : self
    {
        foreach($datasets as $dataset) {
            if($dataset instanceof Dataset) {
                $this->addDataset($dataset);
            }
        }

        return $this;
    }


    public function addDataset(Dataset $dataset) : self
    {
        $this->datasets[] = $dataset;
        return $this;
    }


    /**
     * @inheritDoc
     */
    public function jsonSerialize()
    {
        return [
            'type' => $this->type,
            'data' => [
                'labels' => $this->labels,
                'datasets' => $this->datasets
            ],
            'options' => $this->options
        ];
    }


}