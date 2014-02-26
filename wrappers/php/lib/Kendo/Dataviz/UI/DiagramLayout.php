<?php

namespace Kendo\Dataviz\UI;

class DiagramLayout extends \Kendo\SerializableObject {
//>> Properties

    /**
    * The type of the layout algorythm to use. Predefined values are:There are several criteria on which this algorithm is based and which are respected in as far as the incidence structure allows it:
* links have a preferred direction (the complementary direction of the subtype) and attempt to flow as much as possible in this way
* linked nodes try to stay closed to one another (clustering of nodes)
* links crossings should be minimized
* links should be as short as possible (cross a few layers as possible)The construction of a layered graph drawing proceeds in a series of steps (assuming an horizontal layer from here on):
 + If the input graph is not already a directed acyclic graph, a set of edges is identified the reversal of which will make it acyclic.
 + The nodes of the directed acyclic graph resulting from the first step are assigned to layers, such that each link goes from a higher layer to a lower layer.
 + Edges that span multiple layers are replaced by paths of dummy vertices so that, after this step, each edge in the expanded graph connects two vertices on adjacent layers of the drawing.
 + The nodes within each layer are permuted in an attempt to reduce the number of crossings among the edges connecting it to the previous layer.
 + Each node is assigned a coordinate within its layer, consistent with the permutation calculated in the previous step.
 + The edges reversed in the first step of the algorithm are returned to their original orientations, the dummy vertices are removed from the graph and the vertices and edges are drawn.
    * @param string $value
    * @return \Kendo\Dataviz\UI\DiagramLayout
    */
    public function type($value) {
        return $this->setProperty('type', $value);
    }

    /**
    * The subtype further defines the layout type by specifying in greater detail the behaviour expected by the layout algorithm. Possible predefined values are:
    * @param string $value
    * @return \Kendo\Dataviz\UI\DiagramLayout
    */
    public function subtype($value) {
        return $this->setProperty('subtype', $value);
    }

    /**
    * Either the distance between the siblings if the tree is up/down or between levels if the tree is left/right. In tipOver tree layout this setting is used only for the direct children of the root
    * @param float $value
    * @return \Kendo\Dataviz\UI\DiagramLayout
    */
    public function horizontalSeparation($value) {
        return $this->setProperty('horizontalSeparation', $value);
    }

    /**
    * Either the distance between levels if the tree is up/down or between siblings if the tree is left/right. This property is not used in tipOver tree layout but rather replaced with three additional ones - underneathVerticalTopOffset, underneathVerticalSeparation and underneathHorizontalOffset
    * @param float $value
    * @return \Kendo\Dataviz\UI\DiagramLayout
    */
    public function verticalSeparation($value) {
        return $this->setProperty('verticalSeparation', $value);
    }

    /**
    * Controls the distance between the root and the immediate children of the root. This setting is specific to the radial tree layout.
    * @param float $value
    * @return \Kendo\Dataviz\UI\DiagramLayout
    */
    public function radialFirstLevelSeparation($value) {
        return $this->setProperty('radialFirstLevelSeparation', $value);
    }

    /**
    * Defines the radial separation between the levels (except the first one which is defined by the aforementioned radialFirstLevelSeparation). This setting is specific to the radial tree layout.
    * @param float $value
    * @return \Kendo\Dataviz\UI\DiagramLayout
    */
    public function radialSeparation($value) {
        return $this->setProperty('radialSeparation', $value);
    }

    /**
    * Defines where the circle/arc starts. The positive direction is clockwise and the angle is in radians. This setting is specific to the radial tree layout.
    * @param float $value
    * @return \Kendo\Dataviz\UI\DiagramLayout
    */
    public function startRadialAngle($value) {
        return $this->setProperty('startRadialAngle', $value);
    }

    /**
    * Defines where the circle/arc ends. The positive direction is clockwise and the angle is in radians. Default is 2*Math.PI. This setting is specific to the radial tree layout.
    * @param float $value
    * @return \Kendo\Dataviz\UI\DiagramLayout
    */
    public function endRadialAngle($value) {
        return $this->setProperty('endRadialAngle', $value);
    }

    /**
    * Defines the vertical separation between a parent and its first child. This offsets the whole set of children with respect to its parent. This setting is specific to the tipOver tree layout.
    * @param float $value
    * @return \Kendo\Dataviz\UI\DiagramLayout
    */
    public function underneathVerticalTopOffset($value) {
        return $this->setProperty('underneathVerticalTopOffset', $value);
    }

    /**
    * Defines the vertical separation between siblings and sub-branches. This setting is specific to the tipOver tree layout.
    * @param float $value
    * @return \Kendo\Dataviz\UI\DiagramLayout
    */
    public function underneathVerticalSeparation($value) {
        return $this->setProperty('underneathVerticalSeparation', $value);
    }

    /**
    * Defines the horizontal offset from a child with respect to its parent. This setting is specific to the tipOver tree layout.
    * @param float $value
    * @return \Kendo\Dataviz\UI\DiagramLayout
    */
    public function underneathHorizontalOffset($value) {
        return $this->setProperty('underneathHorizontalOffset', $value);
    }

    /**
    * The number of times that all the forces in the diagram are being calculated and balanced. The default is set at 300, which should be enough for diagrams up to a hundred nodes. By increasing this parameter you increase the correctness of the simulation but it does not always lead to a more stable topology. In some situations a diagram simply does not have a stable minimum energy state and oscillates (globally or locally) between the minima. In such a situation increasing the iterations will not result in a better topology.In situations where there is enough symmetry in the diagram the increased number of iterations does lead to a better layout. In the example below the 100 iterations was not enough to bring the grid to a stable state while 300 iterations did bring all the nodes in such a position that the (virtual) energy of the diagram is a minimum.This setting is specific to the force-directed layout
    * @param float $value
    * @return \Kendo\Dataviz\UI\DiagramLayout
    */
    public function iterations($value) {
        return $this->setProperty('iterations', $value);
    }

    /**
    * In the force-directed layout this setting defines the optimal length between 2 nodes, which directly correlates to the state of the link between them. If a link is longer than there will be a force pulling the nodes together, if the link is shorter the force will push the nodes apart. The optimal length is more and indication in the algorithm than a guarantee that all nodes will be at this distance. The result of the layout is really a combination of the incidence structure of the diagram, the initial topology (positions of the nodes) and the number of iterations.In the layered layout it defines the minimum distance between nodes on the same level. Due to the nature of the algorithm this distance will only be respected if the the whole crossing of links and optimimzation does not induce a shift of the siblings.This setting is specific to the force-directed layout and layered layout
    * @param float $value
    * @return \Kendo\Dataviz\UI\DiagramLayout
    */
    public function nodeDistance($value) {
        return $this->setProperty('nodeDistance', $value);
    }

    /**
    * Each layout algorithm has a different set of parameters customizing the layout but they also all have a common collection of parameters which relate to the way 'pieces' of a diagram are organized.
A diagram can have in general disconnected pieces, known as components, which can be organized in a way independent of the way a component on its own is arranged. In the picture above, this is one diagram consisting of four components. When you apply a certain layout an analysis will first split the diagram in components, arrange each component individually and thereafter organize the components in a grid. The common parameters referred above deal with this grid layout, they define the width, margin and padding of the (invisible) grid used to organize the components.
    * @param \Kendo\Dataviz\UI\DiagramLayoutGrid|array $value
    * @return \Kendo\Dataviz\UI\DiagramLayout
    */
    public function grid($value) {
        return $this->setProperty('grid', $value);
    }

    /**
    * the height (in a vertical layout) or width (in a horizontal layout) between the layers.
    * @param float $value
    * @return \Kendo\Dataviz\UI\DiagramLayout
    */
    public function layerSeparation($value) {
        return $this->setProperty('layerSeparation', $value);
    }

//<< Properties
}

?>
