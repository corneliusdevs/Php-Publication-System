<?php

$publications = array(
    array(
        "link" => "https://www.keele.ac.uk/catalogue/2023-24/fsc-20013.htm",
        "authors" => "Diazepam: The Detection Of A Date Rape Drug",
        "serialNumber" => "00011111111",
        "articleTitle" => "Diazepam: The Detection Of A Date Rape Drug",
        "yearOfPublication" => "2021",
        "DOI" => "https://doi.org/10.21252/h7jb-bb18",
        "Abstract" => "The aim of this research was to determine if diazepam can be detected by Gas Chromatography-Mass 1 1 Spectrometry (GC-MS), H-Nuclear Magnetic Resonance ( H-NMR), Infrared and Raman Spectroscopy. 1 The results of the H-NMR, infrared and Raman spectroscopy suggest that these techniques are more suited for preliminary identification instead of confirmatory identification due to the signal of diazepam appearing to be over-powered by the tablet's fillers. The GC-MS results show that it was possible to detect a pure diazepam tablet which allowed for the estimation for the limit of detection to be 0.001 mg/mL and the limit of quantification to be 0.02 mg/mL. This meant that if a 2 mg diazepam or Valium tablet were to be used in a drug facilitated sexual assault or rape, that the amount of diazepam that could be recovered from the surface of a mobile phone, inside the pocket of a pair of jeans, or inside the wallet, would be in great enough quantity to be detected. This research has shown that should a perpetrator leave a trace of diazepam, it would be forensically possible to link a suspect to the spiking, which could increase the prosecution and conviction rate of rape.",
    ),
    array(
        "link" => "https://www.keele.ac.uk/catalogue/2023-24/csc-20043.htm",
        "authors" => "Macfarland, AB and Schiebel, HN (2021)",
        "serialNumber" => "00011111112",
        "articleTitle" => "Characterising New England (United States Of America) Salt Marsh Sediment Heavy Metal Concentration Trends Via Proximity To Anthropogenic Pollution, Seasons, And Vegetation Coverage",
        "yearOfPublication" => "2021",
        "DOI" => "https://doi.org/10.21252/873y-hx05",
        "Abstract" => "Salt marsh sediment serves an important ecological service by sequestering carbon but is also a repository for several pollutants including heavy metals. Metal uptake in marshes is affected by numerous environmental characteristics such as sediment pH and redox potential, but anthropogenic activities have also been adding metal loads to these fragile ecosystems. This metal deposition can have negative effects both environmentally and on human health. This study aims to better characterise the concentrations of six metals (arsenic (As), copper (Cu), manganese (Mn), zinc (Zn), lead (Pb), nickel (Ni)) in the sediment of two salt marshes in Massachusetts (United States of America). Metal loadings were compared (1) between anthropogenic loadings (i.e., a rural versus urban site); (2) seasonally; and (3) across native and invasive vegetation types. Heavy metal concentrations were analysed using a Handheld XRF instrument. There was a significant difference (p-value < 0.05) between the urban samples and rural samples, with the urban marsh showing higher rates of metal pollution. There was no significant difference (p-value > 0.05) seasonally among these metals but sediment samples under the invasive plant vegetation (Phragmites australis) had significantly higher (p-value < 0.05) metal concentrations compared to those samples under native plant vegetation (Spartina alterniflora). This study serves as a foundation for making future predictions in the face of climate change as more people move to urban areas, average atmospheric temperatures increase and precipitation patterns change, and sea level rise changes plant zonation.",
    ),
    array(
        "link" => "https://www.keele.ac.uk/catalogue/2023-24/csc-20041.htm",
        "authors" => "Tamboli, A and George, SD (2021)",
        "articleTitle" => "Exploring Renewable Energy Potential To Electrify Remote Schools In India: A Literature Review",
        "serialNumber" => "00011111113",
        "yearOfPublication" => "2021",
        "DOI" => "https://doi.org/10.21252/70xz-yc73",
        "Abstract" => "The Indian government is yet to achieve the goal of providing electricity to schools all over the country, and the illiteracy rate seems to emerge from the schools with inadequate infrastructure. Rural schools do not have access to electricity due to the slow electricity grid expansion and continuously increasing electricity demand in the country. However, renewable energy could be the potential answer to assist the government in reaching their goals as renewable energy systems can be used for remote energy generation, eliminating the need for electricity grid extension, or increasing the grid load. This article looked at the viability of renewable energy to support schools' facilities and Information and Communications Technology (ICT) within schools at remote locations in India. The literature showed high wind and solar energy potential in the country, and three case studies illustrated the potential of solar and wind energy systems to support school infrastructure as well as demonstrated positive impacts on the community, finances, and student's educational performance. To conclude, renewable energy sources demonstrated a good potential to support rural school electrification while keeping the environmental impacts to the minimum and contributing to India's renewable energy deployment goals.",
    ),
);

session_start();
$isNew = isset($_SESSION["newPublications"]);
$allPublications;
if ($isNew === true) {
    $allPublications = json_encode($_SESSION["newPublications"]);
} else {
    $allPublications = json_encode($publications);
}

echo "<script>var publications = $allPublications;</script>";
