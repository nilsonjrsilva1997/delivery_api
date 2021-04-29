let fs = require("fs");

const args = process.argv;
const env = args.find((arg) => arg.includes("setEnv"));

const paths = {
    dev: `${__dirname}/.env.dev`,
    prod: `${__dirname}/.env.prod`,
};

if (env) {
    const filePath = `${__dirname}/.env`;

    const destinationEnv = env.split("=");

    if (destinationEnv.length > 1) {
        if (fs.existsSync(filePath)) {
            if (destinationEnv[1] === "dev") {
                if(fs.existsSync(paths.dev)) {
                    const newEnv = fs.readFileSync(paths.dev, 'utf-8');
                    fs.writeFileSync(filePath, newEnv);
                } else {
                    console.error('Você precisa criar o arquivo .env.dev');
                }
            } else if (destinationEnv[1] === "prod") {
                if(fs.existsSync(paths.prod)) {
                    const newEnv = fs.readFileSync(paths.prod, 'utf-8');
                    fs.writeFileSync(filePath, newEnv);
                } else {
                    console.error('Você precisa criar o arquivo .env.prod');
                }
            }
        } else {
            console.error(`Error: o caminho "${filePath}" não existe.`);
            process.exit(1);
        }
    } else {
        console.error(
            "Variavel de ambiente inválida, tente todar `yarn config setEnv=dev`."
        );
        process.exit(1);
    }
} else {
    console.error(
        "Você precise especificar o ambiente, tente todar `yarn config setEnv=dev`."
    );
    process.exit(1);
}
