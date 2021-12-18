const controllerPath = "../application/modules/{{lowerCase moduleName}}/controllers/{{lowerCase moduleName}}.php";
const viewPath = "../application/modules/{{lowerCase moduleName}}/views/index.php";

module.exports = function (plop) {
  plop.setGenerator("module", {
    description: "module generator",
    prompts: [
    {
      type: "input",
      name: "moduleName",
      message: "Input module name? (Ex : about)",
    },
    ],
    actions: [
      // Add Repository
      {
        type: "add",
        path: controllerPath,
        templateFile: "examples/controllers/examples.php",
      },
      {
        type: "add",
        path: viewPath,
        templateFile: "examples/views/index.php",
      },
      {
        type: "modify",
        path: controllerPath,
        pattern: /(CLASS_NAME)/g,
        template: "{{sentenceCase moduleName}}",
      },
      {
        type: "modify",
        path: viewPath,
        pattern: /(MODULE_NAME_LOWER)/g,
        template: "{{lowerCase moduleName}}",
      },
      ],
    });
};
